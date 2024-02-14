using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;
using VALIDATIONS.Models;

namespace VALIDATIONS.Validations
{
    public class PeopleAttribute : ValidationAttribute
    {
        protected override ValidationResult IsValid(object value, ValidationContext validationContext)
        {
            People people = (People)validationContext.ObjectInstance;
            if (people.Name != "Admin") { 
                return new ValidationResult("Você não é o administrador."); 
            }

            return ValidationResult.Success;
        }
    }
}
