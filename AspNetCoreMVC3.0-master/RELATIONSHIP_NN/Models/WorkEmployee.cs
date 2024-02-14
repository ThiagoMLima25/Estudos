using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace RELATIONSHIP_NN.Models
{
    public class WorkEmployee
    {
        public int EmployeeId { get; set; }
        public Employee Employee { get; set; }

        public int WorkId { get; set; }
        public Work Work { get; set; }

        public int Workload { get; set; }
    }
}
