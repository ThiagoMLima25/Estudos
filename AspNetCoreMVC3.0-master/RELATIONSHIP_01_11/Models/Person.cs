using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace RELATIONSHIP_01_11.Models
{
    public class Person
    {
        public int PersonId { get; set; }
        public string Name { get; set; }
        public int Old { get; set; }
        public int? AddressId { get; set; }
        public Address Address { get; set; }
    }
}
