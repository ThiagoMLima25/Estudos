using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace RELATIONSHIP_01_11.Models
{
    public class Context : DbContext
    {
        public DbSet<Person> Person { get; set; }
        public DbSet<Address> Address { get; set; }

        public Context(DbContextOptions<Context> options) : base(options)
        {

        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Person>().HasOne(x => x.Address).WithOne(x => x.Person).HasForeignKey<Person>(x => x.AddressId);
            modelBuilder.Entity<Address>().HasOne(x => x.Person).WithOne(x => x.Address);
        }
    }
}
