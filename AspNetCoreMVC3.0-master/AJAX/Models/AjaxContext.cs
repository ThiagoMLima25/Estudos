using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace AJAX.Models
{
    public class AjaxContext : DbContext
    {
        public DbSet<People> Peoples { get; set; }
        public AjaxContext(DbContextOptions<AjaxContext> options) : base(options)
        {

        }
    }
}
