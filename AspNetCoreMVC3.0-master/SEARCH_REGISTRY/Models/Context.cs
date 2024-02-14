using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using SEARCH_REGISTRY.Models;

namespace SEARCH_REGISTRY.Models
{
    public class Context : DbContext
    {
        public DbSet<Cars> Cars { get; set; }

        public Context(DbContextOptions<Context> options) : base(options)
        {

        }
    }
}
