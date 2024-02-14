using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace RELATIONSHIP_1N.Models
{
    public class Employee
    {
        public int EmployeeId { get; set; }
        public string Name { get; set; }
        public int Old { get; set; }
        public string Document { get; set; }

        public int WorkId { get; set; }
        public Work Work { get; set; }
    }
}
