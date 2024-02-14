using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace BIRTHDAY_INVITATION.Models
{
    public static class Repository
    {
        private static List<Home> list = new List<Home>();

        /**
         * ADD CUSTOMER RESPONSE
         */
        public static void addAnswer(Home response)
        {
            list.Add(response);
        }

        public static IEnumerable<Home> finalList
        {
            get
            {
                return list; 
            }
        }
    }
}
