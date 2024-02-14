using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;

namespace VIEWS_COMPONENTS.Models
{
    public class CarsContext : DbContext
    {
        public DbSet<Cars> Cars { get; set; }
        public CarsContext(DbContextOptions<CarsContext> options) : base(options)
        {

        }
    }
}
