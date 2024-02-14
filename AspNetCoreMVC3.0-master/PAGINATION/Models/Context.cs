using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PAGINATION.Models
{
    public class Context : DbContext
    {
        public DbSet<People> Peoples { get; set; }

        public Context(DbContextOptions<Context> options) : base(options)
        {

        }
    }
}
