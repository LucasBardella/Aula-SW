using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace desafio
{
    internal class Areaa
    {
        public int Base { get; set; }
        public int Altura { get; set; }
        public float AreaTotal { get; set; }

        public void Escolha(int opcao)
        {
            if (opcao == 1)
            {
                float quadrado = CalculaAreaQuadrado();
                Console.WriteLine("A área do quadrado é: " + quadrado);
            }
            if (opcao == 2)
            {
                float retangulo = CalculaAreaRetangulo();
                Console.WriteLine("A área do retângulo é: " + retangulo);
            }
            if (opcao == 3)
            {
                float triangulo = CalculaAreaTriangulo();
                Console.WriteLine("A área do triangulo é: " + triangulo);
            }
        }

        public float CalculaAreaQuadrado()
        {
            AreaTotal = Base * Altura;

            return AreaTotal;
        }
        public float CalculaAreaRetangulo()
        {
            AreaTotal = Base * Altura;

            return AreaTotal;
        }
        public float CalculaAreaTriangulo()
        {
            AreaTotal = Base * Altura / 2;

            return AreaTotal;
        }
    }
}
