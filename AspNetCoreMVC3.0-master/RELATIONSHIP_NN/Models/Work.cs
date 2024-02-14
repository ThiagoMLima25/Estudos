using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace RELATIONSHIP_NN.Models
{
    public class Work
    {
        public int WorkId { get; set; }
        public string Name { get; set; }
        public ICollection<WorkEmployee> WorkEmployees { get; set; }
    }
}
