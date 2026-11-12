const express = require("express");
const mysql =  require("mysql2");
 
const server = express();
 
server.use(express.json());
 
const bd = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "ESTOQUE2"
});
 
bd.connect((err) => {
    if(err)
    {
        console.log("Erro ao conectar ao banco: ", err);
        return;
    }
    console.log("Conectado ao MySQL!");
});
 
server.get("/", (req, res) => {
    res.send("API ESTOQUE funcionado...");
});
 
server.get("/produtos", (req, res) => {
    const sql = "SELECT * FROM PRODUTO";
    bd.query(sql, (err, result) => {
        if(err)
        {
            return res.status(500).send("Erro ao consultar produtos");
        }
        res.json(result);
        res.status(200);
    });
});
 
server.listen(3090, () => {
    console.log("Servidor rodando na porta 3090");
});