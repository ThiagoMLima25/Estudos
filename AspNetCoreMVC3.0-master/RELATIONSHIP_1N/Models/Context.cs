using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace RELATIONSHIP_1N.Models
{
    public class Context :DbContext
    {
        public DbSet<Employee> Employees { get; set; }
        public DbSet<Work> Works { get; set; }

        public Context(DbContextOptions<Context> options) : base(options)
        {

        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Employee>().HasOne(employeer => employeer.Work).WithMany(employeer => employeer.Employee).HasForeignKey(employeer => employeer.WorkId);
            modelBuilder.Entity<Work>().HasMany(work => work.Employee).WithOne(work => work.Work);
        }
    }
}
