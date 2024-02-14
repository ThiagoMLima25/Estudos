using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Logging;
using TEMP_DATA.Models;

namespace TEMP_DATA.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;

        public HomeController(ILogger<HomeController> logger)
        {
            _logger = logger;
        }

        public IActionResult Index()
        {
            TempData["name"] = "Clark";
            TempData["old"] = "22";

            string name;
            int old;

            if (TempData.ContainsKey("name"))
            {
                name = TempData["Name"].ToString();
            }

            if (TempData.ContainsKey("old"))
            {
                old = int.Parse(TempData["Old"].ToString());
            }

            TempData.Keep();

            return View();
        }

        public IActionResult Privacy()
        {
            string name;
            int old;

            if (TempData.ContainsKey("name"))
            {
                name = TempData["Name"].ToString();
            }

            if (TempData.ContainsKey("old"))
            {
                old = int.Parse(TempData["Old"].ToString());
            }
            return View();
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}
