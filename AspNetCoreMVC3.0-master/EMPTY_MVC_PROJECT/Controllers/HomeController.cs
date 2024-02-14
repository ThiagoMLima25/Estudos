using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;

namespace EMPTY_MVC_PROJECT.Controllers
{
    public class HomeController : Controller
    {
        [ViewData]
        public string birthday { get; set; }
        public IActionResult Index()
        {
            return View();
        }

        public IActionResult page1()
        {
            /**
             * ViewBag permite transportar informações para as views
             */
            ViewBag.msgOne = "Mensagem 1 da página 1";
            ViewBag.msgTwo = "Mensagem 2 da página 1";
            return View();
        }

        public IActionResult page2()
        {
            /**
             * ViewData permite transportar informações para as views em formato de array
             */
            ViewData["name"] = "Thiago";
            ViewData["nickName"] = "Clark";
            return View();
        }

        public IActionResult page3()
        {
            birthday = "00/00/0000";
            return View();
        }
    }
}