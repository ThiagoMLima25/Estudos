using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using MODEL_INTRODUCTION.Models;

namespace MODEL_INTRODUCTION.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Index()
        {
            List<Client> ClientsList = new List<Client>();
            ClientsList.Add(new Client { Name = "Clark Kent", NickName = "Superman" });
            ClientsList.Add(new Client { Name = "Bruce Wayne", NickName = "Batman" });
            ClientsList.Add(new Client { Name = "Diana Prince", NickName = "Wonder Woman" });

            return View(ClientsList);
        }
    }
}