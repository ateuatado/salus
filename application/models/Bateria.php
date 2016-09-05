<?php
    class Bateria extends CI_Model
    {
        private $id_bateria;
        private $nome_bateria;
        private $data_inicio;
        private $data_fim;
        private $semestre;
        private $ano;
        
        public function criar() {
    
            $data = array('nome_bateria' => $this->nome_bateria,
                          'data_inicio' => $this->data_inicio,
                          'data_fim' => $this->data_fim,
                          'semestre' => $this->semestre,
                          'ano' => $this->ano
            );
            return $this->db->insert('bateria', $data);
        }

        public function consultar() {
            
            return $this->db->get('bateria')->custom_result_object('Bateria');
        }
        
        public function consultarPorId($id_bateria) {
            //-------------------------------- tabela --- where------------------------------retorna um objeto
            $resultado = $this->db->get_where('bateria', array('id_bateria' => $id_bateria))->custom_result_object('Bateria');
            return !empty($resultado) ? $resultado[0] : $resultado;
        }

        public function editar() {

            $data = array('nome_bateria' => $this->nome_bateria,
                          'data_inicio' => $this->data_inicio,
                          'data_fim' => $this->data_fim,
                          'semestre' => $this->semestre,
                          'ano' => $this->ano
            );
            return $this->db->update('bateria', $data, array('id_bateria' => $this->id_bateria));
        }

        public function deletar() {
            
            $this->db->delete('bateria', array('id_bateria' => $this->id_bateria));
            //return $this->db->update_batch();
        }

        //--------------------------- getters e setters ->

        public function getId_bateria() { return $this->id_bateria; }
        public function setId_bateria($id_bateria) { $this->id_bateria = $id_bateria; }

        public function getNome_bateria() { return $this->nome_bateria; }
        public function setNome_bateria($nome_bateria) { $this->nome_bateria = $nome_bateria; }

        public function getData_inicio() { 
            $data_inicio_format = new DateTime($this->data_inicio);
            return $data_inicio_format->format('d/m/Y');
        }
        public function setData_inicio($data_inicio) { 
            $data_inicio_format = DateTime::createFromFormat('d/m/Y', $data_inicio);
            $this->data_inicio = $data_inicio_format->format('Y-m-d');
        }

        public function getData_fim() { 
            $data_fim_formatada = new DateTime($this->data_fim);
            return $data_fim_formatada->format('d/m/Y');
        }
        public function setData_fim($data_fim) { 
            $data_fim_format = DateTime::createFromFormat('d/m/Y', $data_fim);
            $this->data_fim = $data_fim_format->format('Y/m/d');
        }

        public function getSemestre() { return $this->semestre; }
        public function setSemestre($semestre) { $this->semestre = $semestre; }

        public function getAno() { return $this->ano; }
        public function setAno($ano) { $this->ano = $ano; }
    }
?>