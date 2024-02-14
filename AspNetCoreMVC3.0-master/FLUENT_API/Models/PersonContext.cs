using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;

namespace FLUENT_API.Models
{
    public class PersonContext : DbContext
    {
        public DbSet<Person> People { get; set; }

        public PersonContext(DbContextOptions<PersonContext> options) : base(options)
        {

        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Person>().HasKey(value => value.PersonId);
            modelBuilder.Entity<Person>().Property(value => value.Name).HasColumnName("Nome").HasColumnType("ntext").HasMaxLength(50).IsRequired();
            modelBuilder.Entity<Person>().Property(value => value.Old).HasColumnName("Idade").HasColumnType("int").IsRequired(false);
            modelBuilder.Entity<Person>().Property(value => value.Weight).HasColumnName("Peso").HasColumnType("float").IsRequired(false);
            modelBuilder.Entity<Person>().ToTable("Pessoas");
        }
    }
}
