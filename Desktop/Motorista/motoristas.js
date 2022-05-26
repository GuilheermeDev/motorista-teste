class AdicionarMotoristas {
  constructor(cpf, nome, nomeVeiculo, placa, numeroCorridas, nota) {
    this.cpf = cpf;
    this.nome = nome;
    this.nomeVeiculo = nomeVeiculo;
    this.placa = placa;
    this.numeroCorridas = numeroCorridas;
    this.nota = nota;
    
    // Primeiro "projeto" em JS
  }

  cpfMotoristas() {
    this.cpf = "15536517891";
    return this.cpf;
  }

  nomeMotoristas() {
    this.nome = "Armando Oliveira da Silva";
    return this.nome;
  }

  nomeCarro() {
    this.nomeVeiculo = "Onix";
    return this.nomeVeiculo;
  }

  placaCarro() {
    this.placa = "4A5Q7E8";
    return this.placa;
  }

  corridas() {
    this.numeroCorridas = "654";
    return this.numeroCorridas;
  }

  notas() {
    this.nota = "5 Estrelas";
    return this.nota;
  }
}
let mostrarMotoristas = new AdicionarMotoristas();
console.log(mostrarMotoristas.cpfMotoristas());
console.log(mostrarMotoristas.nomeMotoristas());
console.log(mostrarMotoristas.nomeCarro());
console.log(mostrarMotoristas.placaCarro());
console.log(mostrarMotoristas.corridas());
console.log(mostrarMotoristas.notas());
