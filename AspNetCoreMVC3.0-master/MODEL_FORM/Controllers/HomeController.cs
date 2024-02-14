using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using MODEL_FORM.Models;

namespace MODEL_FORM.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Index()
        {
            return View(Data.AllData());
        }

        public IActionResult New()
        {
            return View();
        }

        [HttpPost]
        public IActionResult New(Client item)
        {
            //THE MODEL CALLING 
            Data.AddClient(item);
            return RedirectToAction("Index");
        }

        public IActionResult Edit(int Id)
        {
            return View(Data.ClientData(Id));
        }

        [HttpPost]
        public IActionResult Edit(Client Item)
        {
            Data.EditClient(Item);
            return RedirectToAction("Index");
        }

        public IActionResult Delete(int Id)
        {
            Data.DeleteClient(Id);
            return RedirectToAction("Index");
        }
    }
}