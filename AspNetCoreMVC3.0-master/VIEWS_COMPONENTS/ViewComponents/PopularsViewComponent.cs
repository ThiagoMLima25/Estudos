using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using VIEWS_COMPONENTS.Models;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;

namespace VIEWS_COMPONENTS.ViewComponents
{
    public class PopularsViewComponent : ViewComponent
    {
        private readonly CarsContext _carContext;

        public PopularsViewComponent(CarsContext carContext)
        {
            _carContext = carContext;
        }

        public async Task<IViewComponentResult> InvokeAsync()
        {
            var result = await _carContext.Cars.Where(value => value.CarType == "Popular").ToListAsync();
            return View(result);
        }
    }
}
