using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace RELATIONSHIP_NN.Models
{
    public class Context : DbContext
    {
        public DbSet<Work> Works { get; set; }
        public DbSet<Employee> Employees { get; set; }
        public DbSet<WorkEmployee> WorksEmployees { get; set; }

        public Context(DbContextOptions<Context> options) : base(options)
        {

        }
        
        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Entity<WorkEmployee>().HasKey(x => new { x.EmployeeId, x.WorkId });
            modelBuilder.Entity<WorkEmployee>().HasOne(x => x.Work).WithMany(x => x.WorkEmployees).HasForeignKey(x => x.WorkId);
            modelBuilder.Entity<WorkEmployee>().HasOne(x => x.Employee).WithMany(x => x.WorkEmployees).HasForeignKey(x => x.EmployeeId);
        }
    }
}
