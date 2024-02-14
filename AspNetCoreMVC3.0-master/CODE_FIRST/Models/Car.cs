using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace CODE_FIRST.Models
{
    public class Car
    {
        public int CarId { get; set; }
        
        [Required(ErrorMessage ="Informe a marca do veículo.")]
        [StringLength(20, ErrorMessage ="A marca não pode exceder o {1} caracteres.")]
        [Display(Name = "Marca")]
        [DisplayName("Marca")]
        public string Brand { get; set; }
        
        [DisplayName("Modelo")]
        public string CarName { get; set; }
        
        [DisplayName("Ano")]
        public int Year { get; set; }
    }
}
