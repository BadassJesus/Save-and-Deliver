require 'singleton'

class Lord
   include Singleton #I am the Lord and there is none else.

   def healThe something='You shall have no other gods before Me'
       @something = something.reverse
       self
   end

   def amen
       @something
   end   
end

# usage:
# puts Lord::instance.healThe("Do my string reverse").amen #=> "esrever gnirts ym oD"