using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ex_POO_2_
{
    public class Pessoa
    {
        public string nome { get; set; }
        public DateTime dataNascimento { get; set; }
        public float altura { get; set; }

        public void ImprimirDados()
        {
            Console.WriteLine("Nome: " + nome);
            Console.WriteLine("Data de Nascimento: " + dataNascimento);
            Console.WriteLine("Altura: " + altura);
        }

        public int CalcularIdade()
        {
            return DateTime.Today.Year - dataNascimento.Year;
        }
        
    }
}
 
