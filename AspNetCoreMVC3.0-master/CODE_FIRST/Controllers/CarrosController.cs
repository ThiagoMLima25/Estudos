using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using CODE_FIRST.Models;
using Microsoft.AspNetCore.Mvc;

namespace CODE_FIRST.Controllers
{
    public class CarrosController : Controller
    {
        private readonly Context _context;

        public CarrosController(Context context)
        {
            _context = context;
        }

        public IActionResult Index()
        {
            return View(_context.Cars.ToList());
        }

        [HttpGet]
        public IActionResult Novo()
        {
            return View();
        }

        [HttpPost]
        [ValidateAntiForgeryToken]
        public IActionResult Novo(Car car)
        {
            /**
             * O ModeState é uma propriedade da classe Controller
             * Ele representa uma coleção de pares nome/valor que são submetidos ao servidor durante o POST
             * Contém uma coleção de mensagens de erros para cada valor submetido.
             * Apesar do seu nome o ModelState não tem conhecimento das classes do Model, ele possui apenas nomes, valores e erros.
             * 
             * Pra quê serve o ModelState ? O ModelState possui dois propósitos :
             * Armazenar o valor submetido ao servidor;
             * Armazenar os erros de validações associados com esses valores;
             */

            if (ModelState.IsValid) 
            {
                _context.Add(car);
                _context.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(car);
        }

        [HttpGet]
        public IActionResult Editar(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var car = _context.Cars.Find(id);
            return View(car);
        }

        [HttpPost]
        [ValidateAntiForgeryToken]
        public IActionResult Editar(int? id, Car car)
        {
            if (id == null)
            {
                return NotFound();
            }

            if (ModelState.IsValid)
            {
                _context.Update(car);
                _context.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(car);
        }

        public IActionResult Visualizar(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var car = _context.Cars.FirstOrDefault(data => data.CarId == id);
            return View(car);
        }

        public IActionResult Deletar(int id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var car = _context.Cars.FirstOrDefault(data => data.CarId == id);
            _context.Remove(car);
            _context.SaveChanges();
            return RedirectToAction("Index");
        }
    }
}