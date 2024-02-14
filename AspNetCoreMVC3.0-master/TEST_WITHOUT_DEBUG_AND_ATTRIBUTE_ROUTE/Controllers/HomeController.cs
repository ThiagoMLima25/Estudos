using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;

namespace TestWithoutDebugAndAttributeRoute.Controllers
{
    public class HomeController : Controller
    {
        [Route("")]
        [Route("Home")]
        [Route("Home/Index")]
        [Route("Home/aaa")]
        public string Index()
        {
            return "Método Index";
        }

        [Route("Home/Listagem/{id?}")]
        public string Listagem(int id)
        {
            return "Método Listagem. ID = " + id;
        }

        [Route("Home/post")]
        public string Edicao()
        {
            return "Método Edicao.";
        }

        [Route("Home/Adicionar/{nome?}/{apelido?}")]
        public string Adicionar(string nome = "Clark", string apelido = "Superman")
        {
            return "Método Adicionar. Nome: "+ nome + " Apelido: " + apelido;
        }
    }
}