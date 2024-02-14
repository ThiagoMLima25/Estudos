using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace FLUENT_API.Models
{
    public class Person
    {
        public int PersonId { get; set; }
        public string Name { get; set; }
        public int? Old { get; set; }
        public double? Weight { get; set; }
    }
}
