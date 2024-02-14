using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using VIEWS_COMPONENTS.Models;

namespace VIEWS_COMPONENTS.ViewComponents
{
    public class SportsViewComponent : ViewComponent
    {
        private readonly CarsContext _carContext;

        public SportsViewComponent(CarsContext carContext)
        {
            _carContext = carContext;
        }

        public async Task<IViewComponentResult> InvokeAsync()
        {
            var result = await _carContext.Cars.Where(value => value.CarType == "Sport").ToListAsync();
            return View(result);
        }
    }
}
