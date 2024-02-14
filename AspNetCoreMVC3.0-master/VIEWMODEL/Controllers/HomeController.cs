using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using VIEWMODEL.ViewModels;

namespace VIEWMODEL.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Index()
        {
            Client objClient = new Client()
            {
                name = "Clark Kent",
                nickName = "Superman",
                phone = "12345-6789"
            };

            return View(objClient);
        }
    }
}