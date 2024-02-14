using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Threading.Tasks;

namespace VIEWS_COMPONENTS.Models
{
    public class Cars
    {
        public int CarsId { get; set; }

        [DisplayName("Model")]
        public string CarModel { get; set; }

        [DisplayName("Name")]
        public string CarName { get; set; }
        
        [DisplayName("Type")]
        public string CarType { get; set; }
        
        [DisplayName("Year")]
        public int CarYear { get; set; }
    }
}
