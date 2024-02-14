using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace PARTIAL_VIEW_WITH_AWAIT.Models
{
    public class PeopleContext : DbContext
    {
        public DbSet<People> People { get; set; }

        public PeopleContext(DbContextOptions<PeopleContext> options) : base(options)
        {

        }
    }
}
