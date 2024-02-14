using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using MULTIPLE_VIEWMODEL.ViewModels;

namespace MULTIPLE_VIEWMODEL.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Index()
        {
            Home home = new Home() {
                Number = 100,
                Color = "green"
            };

            Human human = new Human()
            {
                Name = "Steve Rogers",
                NickName = "Captain America"
            };
               
            /**
             * Add the Home and Human at viewModelBag
             */
            ViewModelBag viewBagData = new ViewModelBag()
            {
                Human = human,
                Home = home
            };

            return View(viewBagData);
        }
    }
}