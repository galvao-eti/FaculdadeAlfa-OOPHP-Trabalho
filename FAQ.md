# FAQ Sobre o Trabalho de Conclusão do Curso de OO com PHP

1. Q: "Quando o senhor refere a criar um CRUD, devemos utilizar a implementação de Traits para auxiliar, ou será apenas um controller normal?"
   A: Traits podem ser utilizadas sem problema, mas não é obrigatório.
2. Q: "O que fazer na função retrieve? Precisa fazer algum tipo de interface para usar o sistema ou só por código já serve?"
   A: A Retrieve deve retornar o RecordSet do banco de dados, e a interface que a utiliza é que ficará responsável pelo fetch. Sim, todos os exemplos (Create, Retrieve, Update e Delete) devem ter interfaces que demonstrem a sua utilização. Claro que nesta resposta específica "interface" se refere a "tela", "página" demonstrando o uso do método.
