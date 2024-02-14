using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using MODEL_NAVIGATION_DETAILS.Models;

namespace MODEL_NAVIGATION_DETAILS.Controllers
{
    public class HomeController : Controller
    {
        List<Client> ClientList;

        public HomeController()
        {
            ClientList = new List<Client>()
            {
                new Client(){ Id = 0, Name = "Clark Kent", NickName = "Superman"},
                new Client(){ Id = 1, Name = "Bruce Wayne", NickName = "Batman"},
                new Client(){ Id = 2, Name = "Diana Prince", NickName = "Wonder Woman"}
            };
        }

        public IActionResult detalhes(int id)
        {
            return View(ClientList[id]);
        }

        public IActionResult Index()
        {
            return View(ClientList);
        }
    }
}