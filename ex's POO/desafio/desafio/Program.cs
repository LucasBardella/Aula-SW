namespace desafio
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Areaa area = new Areaa();
            Console.WriteLine("Digite a base:");
            area.Base = Convert .ToInt32(Console.ReadLine());
            Console.WriteLine("Digite a altura:");
            area.Altura = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine("Escolha: \n1-Quadrado \n2-Retângulo \n3-Triangulo");
            int opcao = Convert.ToInt32(Console.ReadLine());            
            area.Escolha(opcao);






        }
    }
}