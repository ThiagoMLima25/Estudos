using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Logging;
using BIRTHDAY_INVITATION.Models;

namespace BIRTHDAY_INVITATION.Controllers
{
    /**
     * RESUME
     * RESUMO
     * 
     * MODEL, VIEW AND CONTROLLER INTERACTION
     * INTERAÇÃO MODEL, VIEW E CONTROLLER
     * 
     * GET AND POST REQUISITION
     * REQUISIÇÕES GET E POST
     * 
     * FORM CREATION AND REQUISITION
     * CRIAÇÃO E REQUISIÇÃO DE FORM
     * 
     * SIMPLE INTERACTION WITH IEnumerable<T> INTERFACE IN A SPECIFIED TYPE COLLECTION
     * INTERAÇÃO SIMPLES COM A INTERFACE IEnumerable<T> EM UMA COLEÇÃO DE TIPO ESPECIFICADO
     * 
     * SIMPLE INTERACTION WITH A List<T> STRONGLY TYPED
     * INTERAÇÃO SIMPLES COM A List<T> FORTEMENTE TIPADA
     */
    public class HomeController : Controller
    {
        public ViewResult Index()
        {
            return View("Index");
        }

        [HttpGet]
        public ViewResult formulario()
        {
            return View("FormHappyBirthday");
        }

        [HttpPost]
        public ViewResult formulario(Home response)
        {
            Repository.addAnswer(response);
            return View("obrigado", response);
        }

        public ViewResult confirmados()
        {
            return View("confirmados", Repository.finalList.Where(customer => customer.answer == true));
        }
    }
}
