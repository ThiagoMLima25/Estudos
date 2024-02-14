using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;

namespace PASS_VALUES_BETWEEN_VIEWS_AND_PARTIAL_VIEWS.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Index()
        {
            ViewData["value"] = 100;

            return View();
        }
    }
}