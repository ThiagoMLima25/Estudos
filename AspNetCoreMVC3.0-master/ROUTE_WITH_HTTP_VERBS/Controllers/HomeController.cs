using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;

namespace RouteWithHttpVerbs.Controllers
{
    public class HomeController : Controller
    {
        public ViewResult Index()
        {
            return View("menu");
        }

        [HttpGet("Home/Novo-Cliente")]
        public ViewResult NovoCliente()
        {
            return View();
        }

        [HttpPost("Home/Novo-Cliente")]
        public string SalvarNovoCliente()
        {
            /**
             * @TODO Mecanismo de gravação na base de dados.
             */
            return "Novo cliente salvo com sucesso.";
        }
    }
}