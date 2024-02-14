using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;

namespace MINI_PROJECT_CRYPTO_CURRENCY.Models
{
    public class CurrencyContext : DbContext
    {
        public DbSet<Currency> Currencies { get; set; }
        public CurrencyContext(DbContextOptions<CurrencyContext> options) : base(options)
        {

        }
    }
}
