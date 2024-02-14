using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace VALIDATIONS.Models
{
    public class PeopleContext : DbContext
    {
        public DbSet<People> Peoples { get; set; }

        public PeopleContext(DbContextOptions<PeopleContext> options) : base(options)
        {

        }
    }
}
