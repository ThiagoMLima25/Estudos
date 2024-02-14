using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;

namespace ROUTE_SYSTEM_TEMPLATE.controllers
{
    public class InicioController : Controller
    {
        public string Index(int id)
        {
            return "Index value:" + id.ToString();
        }
    }
}