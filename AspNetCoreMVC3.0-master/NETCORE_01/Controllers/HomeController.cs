using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Logging;
using NETCORE_INTRO.Models;

namespace NETCORE_INTRO.Controllers
{
    /**
     * .NETCORE MVC SYSTEM INTRODUCTION
     * INTRODUÇÃO AO SISTEMA MVC DO .NETCORE
     * 
     * VARIABLE PASSING USING VIEWBAG
     * PASSAGEM DE VARIÁVEIS UTILIZANDO VIEWBAG
     * 
     * USE OF CLASS VIEWRESULT
     * UTILIZAÇÃO DA CLASSE VIEWRESULT
     */
    public class HomeController : Controller
    {
        public ViewResult Index()
        {
            ViewBag.nome = "Thiago";
            ViewBag.idade = 25;
            return View("index");
        }

    }
}
