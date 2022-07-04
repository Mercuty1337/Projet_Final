<?php
    require "model/CategoriaModel.php";
    require "Controller/Controller.php";

    Class Categoria extends Controller{

        function __construct(){
            $this->model = new CategoriaModel();
        }
    
        function index(){
            $categorias = $this->model->buscarTodos();
            $this->load_template("categoria/listagem.php", $categorias);
            
        }
    
        function inserir(){
            $categorias = $this->model->inserir();
            $this->load_template("categoria/listagem.php", $categorias);
        }

        function excluir($id){
            $this->model->excluir($id);
            header('Location: ?c=categoria');
        }

        function editar(){

        }

    }
    

    //$model->inserir("Produto de Limpeza"); //inserir dados
    //$model->excluir(1); //exclui dados
    //$model->atualizar("Smartphone", 2); //atulixa os dados
    //var_dump($model->buscarTodos()); //busca todos itens
    //var_dump($model->buscarPorId(2)); // busca algum item pelo seu ID