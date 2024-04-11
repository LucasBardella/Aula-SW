namespace ex_POO_2_
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Pessoa p = new Pessoa();
            p.nome = "Joel";
            p.dataNascimento = new DateTime(1993, 6, 28);
            p.altura = 1.76f;

            p.ImprimirDados();

            int idade = p.CalcularIdade();

            Console.WriteLine("Idade: " + idade);

            Console.ReadKey();
        }
    }
}