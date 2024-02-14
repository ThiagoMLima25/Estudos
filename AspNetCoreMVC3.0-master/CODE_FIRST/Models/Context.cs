using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace CODE_FIRST.Models
{
    public class Context :DbContext
    {
        public DbSet<Car> Cars { get; set; }

        public Context(DbContextOptions<Context> options) : base(options) {}
    }
}
