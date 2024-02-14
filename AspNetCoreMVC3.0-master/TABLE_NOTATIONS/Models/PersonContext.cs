using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;

namespace TABLE_NOTATIONS.Models
{
    public class PersonContext : DbContext
    {
        public DbSet<Person> People { get; set; }

        public PersonContext(DbContextOptions<PersonContext> options) : base(options)
        {

        }
    }
}
