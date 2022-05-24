<?php

    class funcionarioDTO{
        private $cpf;
        private $nome;
        private $email;
        private $usuario;
        private $senha;
        private $perfil;
        private $sexo;
        private $datanasc;

        /**
         * Get the value of cpf
         */ 
        public function getCpf()
        {
                return $this->cpf;
        }

        /**
         * Set the value of cpf
         *
         * @return  self
         */ 
        public function setCpf($cpf)
        {
                $this->cpf = $cpf;

                return $this;
        }

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of usuario
         */ 
        public function getUsuario()
        {
                return $this->usuario;
        }

        /**
         * Set the value of usuario
         *
         * @return  self
         */ 
        public function setUsuario($usuario)
        {
                $this->usuario = $usuario;

                return $this;
        }

        /**
         * Get the value of senha
         */ 
        public function getSenha()
        {
                return $this->senha;
        }

        /**
         * Set the value of senha
         *
         * @return  self
         */ 
        public function setSenha($senha)
        {
                $this->senha = $senha;

                return $this;
        }

        /**
         * Get the value of perfil
         */ 
        public function getPerfil()
        {
                return $this->perfil;
        }

        /**
         * Set the value of perfil
         *
         * @return  self
         */ 
        public function setPerfil($perfil)
        {
                $this->perfil = $perfil;

                return $this;
        }

        /**
         * Get the value of sexo
         */ 
        public function getSexo()
        {
                return $this->sexo;
        }

        /**
         * Set the value of sexo
         *
         * @return  self
         */ 
        public function setSexo($sexo)
        {
                $this->sexo = $sexo;

                return $this;
        }

        /**
         * Get the value of datanasc
         */ 
        public function getDatanasc()
        {
                return $this->datanasc;
        }

        /**
         * Set the value of datanasc
         *
         * @return  self
         */ 
        public function setDatanasc($datanasc)
        {
                $this->datanasc = $datanasc;

                return $this;
        }
    }

?>