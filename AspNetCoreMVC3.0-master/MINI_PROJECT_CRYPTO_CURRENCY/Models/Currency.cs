using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Threading.Tasks;

namespace MINI_PROJECT_CRYPTO_CURRENCY.Models
{
    public class Currency
    {
        public int CurrencyId { get; set; }
        public string Name { get; set; }
        public int Quantity { get; set; }

        [NotMapped]
        public bool Checked { get; set; }
    }
}
