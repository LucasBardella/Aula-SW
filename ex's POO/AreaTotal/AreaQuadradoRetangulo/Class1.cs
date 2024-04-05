using System;
using System.Collections.Generic;
using System.Linq;
using System.Security.Cryptography.X509Certificates;
using System.Text;
using System.Threading.Tasks;

namespace AreaQuadradoRetangulo
{
    public class Area
    {
        public int Base { get; set; }
        public int Altura { get; set; }
        public int AreaTotal { get; set; }

                    
        public int Calcular() 
        {
            AreaTotal = Base * Altura;
            return AreaTotal;
        }

        public string Calcular2()
        {
            string resultado = "";
            AreaTotal = Base * Altura;

            if (Base == Altura)
            {
                resultado = "Quadrado com área igual a " + AreaTotal;
            }else
            {
                resultado = "Retângulo com área igual a " + AreaTotal;
            }

            return resultado;
        }

        public void MostraDetalhes()
        {
            Console.WriteLine("Base: " + Base);
            Console.WriteLine("Altura: " + Altura);
            Console.WriteLine("Area: " + AreaTotal);
        }

    }
}
