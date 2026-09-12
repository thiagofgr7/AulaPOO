class Produto {
    private $nome;
    private $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    // Define como o objeto será impresso
    public function __toString() {
        return "Produto: {$this->nome} - R$ " . number_format($this->preco, 2, ',', '.');
    }
}

$notebook = new Produto("Notebook Dell", 4500.00);

// O PHP invoca __toString() automaticamente aqui
echo $notebook; 
// Saída: Produto: Notebook Dell - R$ 4.500,00