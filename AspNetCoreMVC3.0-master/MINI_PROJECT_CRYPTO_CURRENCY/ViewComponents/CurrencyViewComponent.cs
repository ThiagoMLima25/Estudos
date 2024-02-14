using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using MINI_PROJECT_CRYPTO_CURRENCY.Models;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;

namespace MINI_PROJECT_CRYPTO_CURRENCY.ViewComponents
{
    public class CurrencyViewComponent : ViewComponent
    {
        private readonly CurrencyContext _currencyContext;

        public CurrencyViewComponent(CurrencyContext currencyContext)
        {
            _currencyContext = currencyContext;
        }

        public async Task<IViewComponentResult> InvokeAsync()
        {
            return View(await _currencyContext.Currencies.ToListAsync());
        }
    }
}
